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
