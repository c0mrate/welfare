from flask import Flask, render_template
import psycopg2

app = Flask(__name__)

# PostgreSQL connection configuration
conn = psycopg2.connect(
    host="welfare",
    port=5432,
    database="mydatabase",
    user="ak",
    password="root"
)

@app.route("/")
def index():
    # Execute a SELECT query
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM mytable")
    rows = cursor.fetchall()
    cursor.close()

    # Pass the data to the HTML template for rendering
    return render_template("index.html", rows=rows)

if __name__ == "__main__":
    app.run()
