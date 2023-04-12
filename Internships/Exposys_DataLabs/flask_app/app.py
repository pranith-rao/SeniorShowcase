# Importing essential libraries
from flask import Flask, request, render_template
import pickle
import json
import numpy as np


app = Flask(__name__)

def predict_startup_profit(r_d_expenses, administration_expenses, marketing_expenses):
    # Load the Linear Regression model
    with open('models/startp_profit_prediction_lr_model.pkl', 'rb') as f:
        model = pickle.load(f)

    # Load columns list saved as json file
    with open("models/columns.json", "r") as f:
        data_columns = json.load(f)['data_columns']

    x = np.zeros(len(data_columns))
    x[0] = r_d_expenses
    x[1] = administration_expenses
    x[2] = marketing_expenses

    return round(model.predict([x])[0],2)

@app.route('/')
def index_page():
    return render_template('home.html')

@app.route('/predict',methods=['POST'])
def predict():
    if request.method == 'POST':
        r_d_expenses = request.form['r_d_expenses']
        administration_expenses = request.form["administration_expenses"]
        marketing_expenses = request.form["marketing_expenses"]
        output = predict_startup_profit(r_d_expenses, administration_expenses, marketing_expenses)
        return render_template('result.html',show_hidden=True, prediction_text='Startup Business Profit must be ${}'.format(output))


if __name__ == "__main__":
    app.run(debug=True)