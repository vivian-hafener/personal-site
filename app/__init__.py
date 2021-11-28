from flask import Flask

APP = Flask(__name__)

from .app import APP as app_blueprint
APP.register_blueprint(app_blueprint)