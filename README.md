# linsetmv1-2

### Linset is a WPA/WPA2 phishing tool

### Linset Is Not a Social Enginering Tool


The contents of this readme.md file copied from the original scripts readme.md file which was written in spanish and translated to English, also i must add that this script was revamped by the musket teams, many bugs corrected by them and many thanks to them for that.


I on the other hand translated 99.9% of the script back to English and also added airmon for those using kali 2.0 and Rolling 2016.1/2016.2, because if you dont use kali 1.0 to run script it runs into issues with the newer airmon-ng which uses wlan0mon as the monitor interface instead of mon0. so adding airmon in the same directory as the main script and tweaking the main script a bit makes everything works flawlessly across all versions of kali linux.
But still many thanks to vk496 for a nice script and also musket teams(mmusket33) for revamping it.
And also myself 


# How to use

```
git clone https://github.com/chunkingz/linsetmv1-2.git

cd linsetmv1-2

chmod a+x linsetmv1-2

mv linset /

./linsetmv1-2

```


**Before using the script make sure to read the Help text file written by the musket teams explaining what they did and how to use the script. Doesnt take much of your time tho.**


:warning: First of all, i must say that this is a project for educational purposes that has served me (and hopefully others) to be more in touch with the world of programming and Wireless networks. It is prohibited under any circumstances to use this tool on foregin/unauthorized Wireless Networks!


# How it works

1. Scan the networks.
2. Select network.
3. Capture handshake (can be used without handshake)
4. We choose one of several web interfaces tailored for me (thanks to the collaboration of the users)
5. Mounts one FakeAP imitating the original
6. A DHCP server is created on FakeAP
7. It creates a DNS server to redirect all requests to the Host
8. The web server with the selected interface is launched
9. The mechanism is launched to check the validity of the passwords that will be introduced
10. It deauthenticates all users of the network, hoping to connect to FakeAP and enter the password.
11. The attack will stop after the correct password is gotten.


:tada: `Linset` will check for all necessary dependencies and indicate whether they are installed or not.

:purple_heart: It is also preferable that you still keep the **patch for the negative channel**, else you will have complications attacking correctly.

Happy Phishing :heart:
