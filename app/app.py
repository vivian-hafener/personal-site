from flask import Blueprint, render_template, request, flash, url_for, redirect

APP = Blueprint('APP', __name__)

@APP.route('/')
def index():
    return redirect(url_for('APP.home'))

@APP.route('/home')
def home():
    return render_template('index.html')

@APP.route('/contact')
def contact():
    return render_template('contact.html')

@APP.route('/projects')
def projects():
    return render_template('projects.html')
