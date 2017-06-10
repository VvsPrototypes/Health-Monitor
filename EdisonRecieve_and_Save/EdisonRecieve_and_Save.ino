FILE* fp;
char recvChar;

void setup() {
  Serial1.begin(9600);
pinMode(8,OUTPUT); //LED or Relay Control Turns on the Light
}


void loop() {
    if(Serial1.available())
    {
       recvChar = Serial1.read();
       if(recvChar='O')
       {
        digitalWrite(8,HIGH);       
       }
       if(recvChar='T')
      { fp=fopen("/Temp.txt","a"); 
        recvChar=Serial1.read()
       fprintf(fp,"%c",recvChar);
       fclose(fp);
    }
    if(recvChar='P');
    {
      fp=fopen("/Pulse.txt","a"); 
        recvChar=Serial1.read()
       fprintf(fp,"%c",recvChar);
       fclose(fp);       
    }

    if(recvChar='E')
    {fp=fopen("/ECG.txt","a"); 
    for (int i = 0; i < 500; i++)
    {
      recvChar=Serial1.read()
      fprintf(fp,"%c",recvChar);
      }
      fclose(fp);
     }

     if(recvChar='B')
    {fp=fopen("/BREATH.txt","a"); 
    for (int i = 0; i <500; i++)
    {
      recvChar=Serial1.read()
      fprintf(fp,"%c",recvChar);
      }
      fclose(fp);
     }
  
    }
    system(python, /upload.py)
}





fp=fopen("/log.txt","a"); 
