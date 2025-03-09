from flask import Flask, send_from_directory

app = Flask(__name__)

# Маршрут для обработки всех запросов
@app.route('/', defaults={'path': ''})
@app.route('/<path:path>')
def catch_all(path):
    # Возвращаем файл index.html
    return send_from_directory('', 'index.html')

if __name__ == '__main__':
    app.run(debug=True)