import telnetlib
import time
Welcomingmessage="welcoming_message" #user
Interfaceloopback="numof_loopback"
Mask="ma_sk" #user
 
Ip = "i_p" # New Ip interface
 
ip = "ip_old" # Old Ip database

telnetpw="tel_old"  # Old Telnet Password database

TelnetPassword="pass_word" # New Telnet Password user

Console="consle_e"  #user
Hostname="host_name" #user

enablepass="en_old" # Old Telnet Password database

enablepassword="enable_e" # New Telnet Password user

tn = telnetlib.Telnet(ip)
time.sleep(2)
response = tn.read_until(b"Password:", 5)

if b"Password" in response:
	print("found")
	tn.write(telnetpw.encode('ascii') + b"\n")
	output = tn.read_until(b":", 5)
	print(output)
	
	
else:
	print("not found")
 
	
tn.write(b"enable"+b"\n")
tn.write(enablepass.encode('ascii') + b"\n")
#change enable password

tn.write(b"conf t"+b"\n")
tn.write(b"enable password ")
tn.write(enablepassword.encode('ascii') + b"\n")
#change console password

tn.write(b"Line console 0"+b"\n")
tn.write(b"Password ")
tn.write(Console.encode('ascii') + b"\n")
tn.write(b"Login"+b"\n")
tn.write(b"exit"+b"\n")
#change hostname

tn.write(b"hostname ")
tn.write(Hostname.encode('ascii') + b"\n")
#change telnet password

tn.write(b"Line vty 0 15"+b"\n")
tn.write(b"Password ")
tn.write(TelnetPassword.encode('ascii') + b"\n")
tn.write(b"Login"+b"\n")
tn.write(b"exit"+b"\n")
#change welcoming message

tn.write(b"banner motd #")
tn.write(Welcomingmessage.encode('ascii') + b"#\n")
#change ip of interface 3/0

tn.write(b"interface FastEthernet 3/0 "+b"\n")
tn.write(b"no shutdown"+b"\n")
tn.write(b"Ip address ")
tn.write(Ip.encode('ascii') + b" ")
tn.write(Mask.encode('ascii') + b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"exit"+b"\n")
#saving configration

tn.write(b"wr"+b"\n\n")
tn.write(b"exit"+b"\n")


output = tn.read_until(b'[Connection to host lost]')

print(output)
tn.close()
