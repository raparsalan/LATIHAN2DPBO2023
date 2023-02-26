#include <iostream>
#include <string>
#include "Human.cpp"

using namespace std;

class Sivitas : public Human
{
private:
    string asalUniv;
    string emailEdu;

public:
    Sivitas()
    {
        setNik("");
        setNama("");
        setJk("");
        asalUniv = "";
        emailEdu = "";
    };
    Sivitas(string a, string b, string c, string d, string e)
    {
        setNik(a);
        setNama(b);
        setJk(c);
        asalUniv = d;
        emailEdu = e;
    }

    void setAsalUniv(string a)
    {
        asalUniv = a;
    }
    void setEmailEdu(string a)
    {
        emailEdu = a;
    }

    string getAsalUniv()
    {
        return asalUniv;
    }
    string getEmailEdu()
    {
        return emailEdu;
    }

    ~Sivitas()
    {
    }
};
