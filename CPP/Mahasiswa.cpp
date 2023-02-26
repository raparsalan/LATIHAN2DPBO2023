#include <iostream>
#include <string>
#include "Sivitas.cpp"

using namespace std;

class Mahasiswa : public Sivitas
{
private:
    string nim;
    string prodi;
    string fakultas;

public:
    Mahasiswa()
    {
        setNik("");
        setNama("");
        setJk("");
        setAsalUniv("");
        setEmailEdu("");
        nim = "";
        prodi = "";
        fakultas = "";
    };
    Mahasiswa(string a, string b, string c, string d, string e, string f, string g, string h)
    {
        setNik(a);
        setNama(b);
        setJk(c);
        setAsalUniv(d);
        setEmailEdu(e);
        nim = f;
        prodi = g;
        fakultas = h;
    }

    void setNim(string a)
    {
        nim = a;
    }
    void setProdi(string a)
    {
        prodi = a;
    }
    void setFakultas(string a)
    {
        fakultas = a;
    }

    string getNim()
    {
        return nim;
    }
    string getProdi()
    {
        return prodi;
    }
    string getFakultas()
    {
        return fakultas;
    }

    ~Mahasiswa()
    {
    }
};
