#include "Mahasiswa.cpp"
#include <list>
using namespace std;

int main()
{
    list<Mahasiswa> listMhs;
    Mahasiswa bintang("3202366654", "Bintang", "L", "UPI", "bintangfajar77@upi.edu", "2108852",
                      "Ilkom", "FPMIPA");
    listMhs.push_back(bintang);
    Mahasiswa rayhan;
    rayhan.setNik("3202351254");
    rayhan.setNama("Rayhan");
    rayhan.setJk("L");
    rayhan.setAsalUniv("UPN Veteran");
    rayhan.setEmailEdu("rayhanimoetzz89@upn.edu");
    rayhan.setNim("2103366");
    rayhan.setProdi("Sastra Inggris");
    rayhan.setFakultas("FPBS");
    listMhs.push_back(rayhan);
    int jml = 1;
    list<Mahasiswa>::iterator i;
    for (i = listMhs.begin(); i != listMhs.end(); i++)
    {
        cout << jml << ". NIK           : " << i->getNik() << endl;
        cout << "   NIM           : " << i->getNim() << endl;
        cout << "   Nama          : " << i->getNama() << endl;
        cout << "   Jenis Kelamin : " << i->getJk() << endl;
        cout << "   Asal Univ     : " << i->getAsalUniv() << endl;
        cout << "   Email         : " << i->getEmailEdu() << endl;
        cout << "   Prodi         : " << i->getProdi() << endl;
        cout << "   Fakultas      : " << i->getFakultas() << endl;
        jml++;
    }
    return 0;
};