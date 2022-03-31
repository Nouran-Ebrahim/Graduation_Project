import telnetlib
import time
Welcomingmessage="welcoming_message"
Interfaceloopback="numof_loopback"
Mask="ma_sk"
Ip = "i_p" # New Ip
 
ip = "ip_old" # Old Ip

telnetpw="tel_old"  # Old Telnet Password

TelnetPassword="pass_word" # New Telnet Password

Console="consle_e"
Hostname="host_name"

enablepass="en_old" # Old Telnet Password

enablepassword="enable_e" # New Telnet Password

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
