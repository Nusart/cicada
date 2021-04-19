import json
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart



import smtplib, ssl

def mail(email):
    ctr = -1
    with open( "counter.txt","r") as f:
                for l in f:
                    ctr = int(l)
    with open('/home/nusart/mysite/data.json') as f:
        data = json.load(f)



    un = data[str(l)]["uname"]
    pw = data[str(l)]["passwd"]
    #print("",un,"\n",pw)



    port = 465  # For SSL
    smtp_server = "smtp.gmail.com"
    sender_email = "cicada.iiserb@gmail.com"  # Enter your address
    receiver_email = "{}".format(email)  # Enter receiver address
    password = "qwerty567%^&"

    message = MIMEMultipart("alternative")
    message["Subject"] = "CICADA Username and Password"
    message["From"] = sender_email
    message["To"] = receiver_email
    text = """\
        Username: {}
        Password: {}

        Use the above credentials and login to the following page:
        """.format(un, pw)

    part1 = MIMEText(text, "plain")

    message.attach(part1)

    context = ssl.create_default_context()

    with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
        try:
            server.starttls()
            server.login(sender_email, password)
            server.sendmail(sender_email, receiver_email, message.as_string())
            return "ok"
        except:
            return """err"""
