
# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template

app = Flask(__name__)
app.config["DEBUG"] = True

@app.route('/')
def index():
    return render_template("result.html")

from flask import Flask, render_template, json, request
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False


@app.route("/")
def main():
   user = {"name":"XueXuting"}
   return render_template("index.html",user=user,title="Home Page")



# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/howtogrow/')
def howtogrow():
    return render_template('howtogrow.html')

if __name__ == '__main__':
    app.run(debug=True)


from flask import Flask, request, url_for, redirect, render_template
app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')



@app.route('/howtogrow', methods=['GET', 'POST'])
def howtogrow():
    if request.method == 'POST':
        # do stuff when the form is submitted
        # redirect to end the POST handling
        # the redirect can be to the same route or somewhere else
        return redirect(url_for('index'))
    # show the form, it wasn't submitted
    return render_template('howtogrow.html')





    {{ url_for('howtogrow') }}
    {{ url_for('index') }}
