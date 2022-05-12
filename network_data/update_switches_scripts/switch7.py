import telnetlib
import time
Welcomingmessage="hello to 1st_floor" #user
Interfacevlan="1" #user
Mask="255.255.255.0" #user
ip = "41.1.1.1" #DataBase Router
switch_ip="42.1.1.2" # the Current Ip Vlan (old ip switch) database
Ip= "42.1.1.2" # New Ip Vlan (switch)#user

telnetpw="cisco"  # telnet router  database
switch_telnetpw="cisco" # old telnet switch database
TelnetPassword="cisco" # new telnet switch #user

Console="cisco" #user

Hostname="1st_floor" #user
 
enable_router="cisco" #  old enable router database
enable_switch="cisco"  # old enable switch database
enablepassword = "cisco" # new enable switch #user





tn = telnetlib.Telnet(ip)
time.sleep(2)
response = tn.read_until(b"Password:", 5)
#enablepassrouter2="cisco"
#enablepassrouter=enablepassrouter2
if b"Password" in response:
	print("found")
	tn.write(telnetpw.encode('ascii') + b"\n")
	output = tn.read_until(b":", 5)
	print(output)
	
	
else:
	print("not found") 
tn.write(b"enable"+b"\n")
tn.write(enable_router.encode('ascii') + b"\n")
tn.write(b"telnet ")
tn.write(switch_ip.encode('ascii') + b"\n")  #database
tn.write(switch_telnetpw.encode('ascii') + b"\n") #database
tn.write(b"enable"+b"\n")
tn.write(enable_switch.encode('ascii') + b"\n") #database

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
#change ip of vlan

tn.write(b"interface vlan ")
tn.write(Interfacevlan.encode('ascii') + b"\n")
tn.write(b"no shutdown"+b"\n")
tn.write(b"Ip address ")
tn.write(Ip.encode('ascii') + b" ")
tn.write(Mask.encode('ascii') + b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"exit"+b"\n")
#saving configration

tn.write(b"wr"+b"\n\n")
tn.write(b"exit"+b"\n")


output = tn.read_until(b'closed by foreign host]')


print(output)
tn.close()
