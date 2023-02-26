from Sivitas import Sivitas

class Mahasiswa(Sivitas): 
    __nim = ""
    __prodi  = ""
    __fakultas = ""

    def __init__(self):
        self.nik =""
        self.nama = ""
        self.jk = ""
        self.asalUniv = ""
        self.emailEdu = ""
        self.nim = ""
        self.prodi= ""
        self.fakultas =""

    def setNim(self, a):
        self.nim = a
    def setProdi(self, a):
        self.prodi = a
    def setFakultas(self, a):
        self.fakultas = a
    
    def getNim(self):
        return self.nim
    def getProdi(self):
        return self.prodi
    def getFakultas(self):
        return self.fakultas
    
    

