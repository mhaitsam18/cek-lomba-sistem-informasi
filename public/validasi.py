from itertools import count
import string
import mysql.connector
import matplotlib.pyplot as plt
import numpy as np
import re
import webbrowser
import joblib
import pandas as pd
from sklearn import preprocessing
from sklearn.preprocessing import StandardScaler
import urllib.request
import urllib
from urllib.request import urlopen
import urllib.request
from collections import Counter
import webbrowser
import bs4 as bs
import requests
import urllib.request
import re
import urllib
from urllib.request import urlopen
from collections import Counter
import webbrowser
import bs4 as bs
import urllib.request
import requests


dbase = mysql.connector.connect(
    host='localhost',
    database='proyekakhir_db',
    user='root',
    password=''
)
# ambil link
link = dbase.cursor()
link.execute('select link from prediksi order by id desc limit 1')
resultlink = link.fetchone()
for a in resultlink:
    print(a)


# ambil judul
judul = dbase.cursor()
judul.execute('select judul from prediksi order by id desc limit 1')
resultjudul = judul.fetchone()
for b in resultjudul:
    print(b)


# ambil text
teks = dbase.cursor()
teks.execute('select teks from prediksi order by id desc limit 1')
resultteks = teks.fetchone()
for c in resultteks:
    print(c)


# webbrowser.open(a)
# hitung karakter yang ada di judul
# fungsi hitung special char
def word_count_title(word_count, text):
    num = 0
    for i in range(len(text)):
        if(text[i] == word_count):
            num += 1
    return num


# ektraksi fitur pada judul
judul = b
# jumlah kata
word_counttitle = len(judul.split())


# menghitung panjang teks
text_lentitle = len(judul)

kataLomba = 'Lomba'

word_lomba = judul.count(kataLomba)
# print(word_lomba)


kataKompetisi = 'Kompetisi'

word_kompetisi = judul.count(kataKompetisi)
# print(word_kompetisi)

kataMahasiswa = 'Mahasiswa'

word_mahasiswa = judul.count(kataMahasiswa)
# print(word_mahasiswa)

kataDeadline = 'Deadline'

word_deadline = judul.count(kataDeadline)
# print(word_deadline)
# String to be searched in start of string
# search = 'Lomba'

# # count of occurrence of a and creating new column
# df1 = df.count(search)
print(word_counttitle, text_lentitle, word_lomba,
      word_kompetisi, word_mahasiswa, word_deadline)


# hitung jumlah karakter di link


source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Lomba'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()
textLomba = text.count('Lomba')
# print(textLomba)

# ---kompetisi---
source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Kompetisi'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()

textKompetisi = text.count('Kompetisi')
# print(textKompetisi)

# ---deadline---
source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Deadline'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()

textDeadline = text.count('Deadline')
# print(textDeadline)

# ---mahasiswa---
source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Mahasiswa'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()

textMahasiswa = text.count('Mahasiswa')
# print(textMahasiswa)


# ---pendaftaran---
source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Pendaftaran'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()

textPendaftaran = text.count('Pendaftaran')
# print(textPendaftaran)

# ---timeline---
source = urllib.request.urlopen(a).read()

soup = bs.BeautifulSoup(source, 'lxml')

for paragraph in soup.find_all('Timeline'):
    print(paragraph.string)
    print(str(paragraph.text))
soup.get_text()

text = soup.get_text()

textTimeline = text.count('Timeline')
# print(textTimeline)

# # PAKE REGEX
# # ---lomba---
# url = b
# my_source_code = requests.get(url).text
# pattern = "lomba"

# count1 = len(re.findall(pattern, my_source_code))
# print(count1)
# # ---kompetisi---
# url = b
# my_source_code = requests.get(url).text
# pattern = "kompetisi"

# count2 = len(re.findall(pattern, my_source_code))
# print(count2)

# # ---deadline---
# url = b
# my_source_code = requests.get(url).text
# pattern = "deadline"

# count3 = len(re.findall(pattern, my_source_code))
# print(count3)

# # ---timeline---
# url = b
# my_source_code = requests.get(url).text
# pattern = "timeline"

# count4 = len(re.findall(pattern, my_source_code))
# print(count4)

# # ---pendaftaran---
# url = b
# my_source_code = requests.get(url).text
# pattern = "pendaftaran"

# count5 = len(re.findall(pattern, my_source_code))
# print(count5)
# # ---mahasiswa---
# url = b
# my_source_code = requests.get(url).text
# pattern = "mahasiswa"

# count6 = len(re.findall(pattern, my_source_code))
# print(count6)


# # print(textLomba, textKompetisi, textDeadline,
# #       textMahasiswa, textPendaftaran, textTimeline)

# print(count1, count2, count3, count4, count5, count6)


# ektraksi teks

tekss = c

word_tekss = len(tekss.split())


# menghitung panjang teks
text_lentekss = len(tekss)


print(word_tekss, text_lentekss)


df = pd.read_excel(
    'C:\\xampp\\htdocs\\dinda_ml\\dataset\\dinss.xlsx', engine='openpyxl')
features = np.asarray(df.loc[:, 'word_count_title':'kata_pendaftaran_content'])

# klasifikasi
model_file = 'C:\\xampp\\htdocs\\dinda_ml\\model\\model_dinda2.sav'
loaded_model = joblib.load(model_file)

data = (word_counttitle, text_lentitle, word_lomba,
        word_kompetisi, word_mahasiswa, word_deadline, textLomba, textKompetisi, textDeadline,
        textMahasiswa, textPendaftaran, textTimeline, word_tekss, text_lentekss)


# data = (word_count1, and_count1, slash_count1,plus_count1, seru_count1, kurbuk_count1, digit_count1, avg_grayscale1, b1, g1, r1, skewnes1, deviasi1, word_count2,  and_count2,  minus_count2, seru_count2, kurbuk_count2, kurtup_count2, digit_count2, avg_grayscale2, b2, g2, skewnes2, deviasi2)
data1 = np.reshape(data, (1, -1))

scaler = StandardScaler().fit(features)
scaled_feature = scaler.transform(data1)


prediksi = loaded_model.predict(scaled_feature)
((np.round(prediksi[0], 2)))
if (np.round(prediksi)) == 1:
    output = "Valid"
elif(np.round(prediksi)) == 0:
    output = "Invalid"
# else:
#     output = "ngawur"
print(output)
