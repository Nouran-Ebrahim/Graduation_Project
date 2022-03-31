#1st part

import telnetlib

Hostname=  "Electrical_Building" 
Enable=  "cisco" 
Welcomingmessage=  "hello to Electrical_Building"
Console="cisco"
TelnetPassword =  "cisco"
Interfaceloopback="1"
Mask="255.255.255.0"
Ip = "11.1.1.1"
tn = telnetlib.Telnet(Ip)
tn.read_until(b"Password : ")
tn.write(TelnetPassword.encode('ascii') + b"\n")

#configration

tn.write(b"enable\n")
tn.write(Enable.encode('ascii') + b"\n")
tn.write(b"conf t\n")
tn.write(b"Line console 0\n")
tn.write(b"Password \t")
tn.write(Console.encode('ascii') + b"\n")
tn.write(b"Login\n")
tn.write(b"exit \n")
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
print("done")
