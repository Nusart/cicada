import json
# Import smtplib for the actual sending function
import smtplib

# Import the email modules we'll need
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from datetime import datetime

def send_email(data):
    sending_ts = datetime.now()
    sub = "Here's my subject %s" % sending_ts.strftime('%Y-%m-%d %H:%M:%S')
    msg = MIMEMultipart('alternative')
    msg['From'] = 'no-reply@service.com'
    msg['To'] = 'provider@service.com'
    msg['Subject'] = sub

    body = "This would be the body of the msg"
    msg.attach(MIMEText(body, 'plain'))

    attachment = MIMEText(json.dumps(data))
    attachment.add_header('Content-Disposition', 'attachment', 
                          filename="foo.name.json")
    msg.attach(attachment)

    s = smtplib.SMTP('email-server')
    s.send_message(msg)
    s.quit()
    return 0

if __name__=="__main__":
    data = {"my": "foo", "yours": "bar"}
    send_email(data)