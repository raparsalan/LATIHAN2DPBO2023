from Human import Human

class Sivitas(Human): 
    __asalUniv = ""
    __emailEdu  = ""

    def __init__(self):
        self.nik =""
        self.nama = ""
        self.jk = ""
        self.asalUniv = ""
        self.emailEdu = ""

    def setAsalUniv(self, a):
        self.asalUniv = a
    def setEmailEdu(self, a):
        self.emailEdu = a
    
    def getAsalUniv(self):
        return self.asalUniv
    def getEmailEdu(self):
        return self.emailEdu
    
    

