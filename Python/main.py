from Mahasiswa import Mahasiswa

listMhs =  []
bintang = Mahasiswa()
bintang.setNik("3202366654")
bintang.setNama("Bintang")
bintang.setJk("L")
bintang.setAsalUniv("UPI")
bintang.setEmailEdu("bintangfajar77@upi.edu")
bintang.setNim("2108852")
bintang.setProdi("Ilkom")
bintang.setFakultas("FPMIPA")
listMhs.append(bintang)

rayhan = Mahasiswa()
rayhan.setNik("3202351254")
rayhan.setNama("Rayhan")
rayhan.setJk("L")
rayhan.setAsalUniv("UPN Veteran")
rayhan.setEmailEdu("rayhanimoetzz89@upn.edu")
rayhan.setNim("2103366")
rayhan.setProdi("Sastra Inggris")
rayhan.setFakultas("FPBS")
listMhs.append(rayhan)
jml = 1
for mhs in listMhs:
   print(str(jml)+". NIK           : ", mhs.getNik())
   print("   NIM           : " , mhs.getNim())
   print("   Nama          : " , mhs.getNama())
   print("   Jenis Kelamin : " , mhs.getJk())
   print("   Asal Univ     : " , mhs.getAsalUniv())
   print("   Email         : " , mhs.getEmailEdu())
   print("   Prodi         : ", mhs.getProdi())
   print("   Fakultas      : ", mhs.getFakultas())
   jml+=1
