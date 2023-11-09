// Online C++ compiler to run C++ program online
#include <iostream>
#include <string>

using namespace std;

class Car
{
    public:
        string brand;
        Car(string b){
            brand = b;
        }
        Car(string brand, int mileage){
            this->brand = brand;
            this->mileage = mileage;
        }
    private:
        int mileage = 0;
};

int main() {
    Car myCar("Dacia");
    cout << myCar.brand << endl;
    // Write C++ code here

    std::cout << "Hello world!";

    return 0;
}