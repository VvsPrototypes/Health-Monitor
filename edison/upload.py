#!/usr/bin/python
import ftplib
import os
filename = "ECG.txt"
ftp = ftplib.FTP("192.168.1.**")
ftp.login("Jarvis", "******")
ftp.cwd("/")
ftp.storlines("STOR " + filename, open(filename, 'r'))
os.system('mjpg_streamer -i "input_uvc.so -n -f 30 -r 800x600" -o "output_http.so -p 8080 -w ./www"')