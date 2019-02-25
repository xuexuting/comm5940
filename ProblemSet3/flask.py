# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def index():
    return render_template('index.html')


@app.route("/howtoput")
def howtoput():
    return render_template('howtoput.html')

@app.route("/blog")
def blog():
    return render_template('blog.html')

@app.route("/contactme")
def contactme():
    return render_template('contactme.html')


@app.route("/table")
def table():

    r = requests.get('https://api.airtable.com/v0/appMB8tOJPyk2Vf3e/Imported%20table?api_key=keyBadmTVmE3SwXQR')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            dataset.append(dict)

    return render_template('table.html', entries=dataset)

@app.route("/chart")
def chart():
    headers = {
        'Authorization': 'Bearer keyBadmTVmE3SwXQR',
    }

    params = (
        ('view', 'Grid view'),
    )

    r = requests.get('https://api.airtable.com/v0/appYRhGAnanfPVL0D/user_name?api_key=keyBadmTVmE3SwXQR', headers=headers, params=params)
    dict1 = r.json()
    dict2 = {}
    dataset = []
    name_list = []
    total_entries_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset.append(dict2)
    for item in dataset:
        name_list.append(item.get('Name'))
        total_entries_list.append(item.get('TotalCreds'))
    return render_template('chart.html', entries = zip(name_list, total_entries_list))
