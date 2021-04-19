from random_username.generate import generate_username
import random, string
import json

no_of_outputs = int(input("No of outputs:"))

# usernames

un_len = 8
un_character = string.ascii_letters
username = []
for i in range(no_of_outputs):
    un = []
    for j in range(un_len):
        un.append(random.choice(un_character))
    username.append(''.join(un))   
#print("USERNAMES: ", username)

i = 0
j = 0

# passwords

pwd_len = 8
pwd_character = string.ascii_letters + string.digits
password = []
for i in range(no_of_outputs):
    pwd = []
    for j in range(pwd_len):
        pwd.append(random.choice(pwd_character))
    password.append(''.join(pwd))   
#print("PASSWORDS: ", password)

i = 0
j = 0

# cookies

ck_len = 44
ck_character = string.ascii_letters + string.digits
cookies = []
for i in range(no_of_outputs):
    ck = []
    for j in range(ck_len):
        ck.append(random.choice(ck_character))
    cookies.append(username[i] + password[i] + ''.join(ck))   
#print("COOKIES: ", cookies)


# append to json

def append_to_json(filepath, data):
    # construct JSON fragment as new file ending
    new_ending = ", " + json.dumps(data)[1:-1] + "}\n"

    # edit the file in situ - first open it in read/write mode
    with open(filepath, 'r+') as f:

        f.seek(0, 2)        # move to end of file
        index = f.tell()    # find index of last byte

        # walking back from the end of file, find the index 
        # of the original JSON's closing '}'
        while not f.read().startswith('}'):
            index -= 1
            if index == 0:
                raise ValueError("can't find JSON object in {!r}".format(filepath))
            f.seek(index)

        # starting at the original ending } position, write out
        # the new ending
        f.seek(index)
        f.write(new_ending)    

# let 'er rip
for k in range(1, no_of_outputs):
    newval = {k: {"uname": username[k], "passwd": password[k], "auth_id": cookies[k], "level1": "0", "level2": "0", "level3": "0", "level4": "0", "level5": "0", "val": "-7894234"}}
    append_to_json('data.json', newval)
    
    
    
    
    
    