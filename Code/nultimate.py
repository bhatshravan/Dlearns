import http.client # module for making HTTP request to website
import winsound # module for making beep like noise once website is up
from time import sleep # module for putting a desired delay to reduce load on computer system
count=0 
import timeit
start_time = timeit.default_timer()
from urllib.request import urlopen
from bs4 import BeautifulSoup
import os
i=1
text_file = open("Output.txt", "a")
print(os.getcwd())
llo=""
l1="KS"
l2="16"
l3="CS"
l4="00"
l5="1"
while(i<100):
	
	l="http://result.vtu.ac.in/cbcs_results2017.aspx?usn=1KS16CS00"+str(i)+"&sem=1"
	l4="00"+str(i)
	if(i>10 and i<100):
		l4="0"+str(i)
	elif(i>99):
		l4=""+str(i)
	llo="1"+l1+l2+l3+l4
	l="http://result.vtu.ac.in/cbcs_results2017.aspx?usn="+llo+"&sem="+l5
	
	
	soup = BeautifulSoup(urlopen(l),"html.parser")
	
	try:
		result = soup.find("span", {"id":"lblSGPA"})
		output = soup.find(attrs={"id": "txtName"})['value']
		output1 = soup.find(attrs={"id": "txtGP1"})['value']
		output2 = soup.find(attrs={"id": "txtGP2"})['value']
		output3 = soup.find(attrs={"id": "txtGP3"})['value']
		output4 = soup.find(attrs={"id": "txtGP4"})['value']
		output5 = soup.find(attrs={"id": "txtGP5"})['value']
		output6 = soup.find(attrs={"id": "txtGP6"})['value']
		output7 = soup.find(attrs={"id": "txtGP7"})['value']
		output8 = soup.find(attrs={"id": "txtGP8"})['value']
		print ('{0}:{1}:{2}:{3}:{4}:{5}:{6}:{7}:{8}:{9}:{10}'.format(output,i,output1,output2,output3,output4,output5,output6,output7,output8,result.text))
		text_file.write('\n{0}:{1}:{2}:{3}:{4}:{5}:{6}:{7}:{8}:{9}:{10}'.format(output,i,output1,output2,output3,output4,output5,output6,output7,output8,result.text))
	except:
		print("error:{0}",i)

	i=i+1
text_file.close()
elapsed = timeit.default_timer() - start_time
print(elapsed)
