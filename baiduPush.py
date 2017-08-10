# !/usr/bin/python
# -*- coding: UTF-8 -*-


import requests
from xml.dom.minidom import parse
import xml.dom.minidom

DOMTree = xml.dom.minidom.parse("./baidusitemap.xml")
data0 = DOMTree.getElementsByTagName("loc")
list_len = len(data0)
payload = []
data2 = []


for i in range(0, list_len, 1):
    data1 = data0[i].firstChild.data
    data2.append(data1)

payload = str(data2)
url = "http://data.zz.baidu.com/urls"
querystring = {"site":"www.oneonecity.xyz","token":"dpaCInJaGyEr2qHw"}
headers = {
    'content-type': "text/plain",
    'cache-control': "no-cache",
    }

response = requests.request("POST", url, data=payload, headers=headers, params=querystring)
print(response.text)











