import telnetlib
import time
Welcomingmessage="welcoming_message"
Interfacevlan="numof_vlan"
Mask="ma_sk"
ip = "router_ip" #DataBase Router

Ip= "i_p" # New Ip Vlan (switch)

telnetpw="r_tel"  # telnet router 
switch_telnetpw="sw_tel" # old telnet switch 
TelnetPassword="pass_word" # new telnet switch 

Console="consle_e"

Hostname="host_name"

enable_router="en_router" #  enable router
enable_switch="sw_en"  # old enable switch
enablepassword = "enable_e" # new enable switch

switch_ip="sw_ip" # the Current Ip Vlan (old ip switch)



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
tn.write(b"conf t"+b"\n")
tn.write(b"enable secret ")
tn.write(enablepassword.encode('ascii') + b"\n")
tn.write(b"Line console 0"+b"\n")
tn.write(b"Password ")
tn.write(Console.encode('ascii') + b"\n")
tn.write(b"Login"+b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"hostname ")
tn.write(Hostname.encode('ascii') + b"\n")
tn.write(b"Line vty 0 15"+b"\n")
tn.write(b"Password ")
tn.write(TelnetPassword.encode('ascii') + b"\n")
tn.write(b"Login"+b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"banner motd #")
tn.write(Welcomingmessage.encode('ascii') + b"#\n")
tn.write(b"interface vlan ")
tn.write(Interfacevlan.encode('ascii') + b"\n")
tn.write(b"no shutdown"+b"\n")
tn.write(b"Ip address ")
tn.write(Ip.encode('ascii') + b" ")
tn.write(Mask.encode('ascii') + b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"wr"+b"\n\n")
tn.write(b"exit"+b"\n")


output = tn.read_until(b'closed by foreign host]')


print(output)
tn.close()
