#1st part

import telnetlib
Hostname=  "1" 
Enable=  "2" 
Welcomingmessage=  "3"
TelnetPassword =  "4"
Interfaceloopback="5"
Mask="6"
Ip = "7"
tn = telnetlib.Telnet(Ip)
tn.read_until(b"Password : ")
tn.write(TelnetPassword.encode('ascii') + b"\n")

#configration

tn.write(b"enable\n")
tn.write(Enable.encode('ascii') + b"\n")
tn.write(b"conf t\n")
tn.write(b"hostname\t")
tn.write(Hostname.encode('ascii') + b"\n")
tn.write(b"banner motd \t")
tn.write(Welcomingmessage.encode('ascii') + b"\n")
tn.write(b"exit \n")
tn.write(b"conf t\n")
tn.write(b"interface loopback\t")
tn.write(Interfaceloopback.encode('ascii') + b"\n")
tn.write(b"no shutdown\n")
tn.write(b"ip addresse\t")
tn.write(Ip.encode('ascii') + b"\t")
tn.write(Mask.encode('ascii') + b"\n")
tn.write(b"exit \n")
