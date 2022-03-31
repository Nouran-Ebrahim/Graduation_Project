import telnetlib
import time
Welcomingmessage="hello to Electrical_Building"
Interfaceloopback="1"
Mask="255.255.255.0"
Ip = "11.1.1.1" # New Ip
 
ip = " 11.1.1.1 " # Old Ip

telnetpw=" cisco"  # Old Telnet Password

TelnetPassword="cisco" # New Telnet Password

Console="cisco"
Hostname="Electrical_Building"

enablepass=" Cico" # Old Telnet Password

enablepassword="cic" # New Telnet Password

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
tn.write(b"interface loopback ")
tn.write(Interfaceloopback.encode('ascii') + b"\n")
tn.write(b"no shutdown"+b"\n")
tn.write(b"Ip address ")
tn.write(Ip.encode('ascii') + b" ")
tn.write(Mask.encode('ascii') + b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"exit"+b"\n")
tn.write(b"wr"+b"\n\n")
tn.write(b"exit"+b"\n")


output = tn.read_until(b'[Connection to host lost]')

print(output)
tn.close()
