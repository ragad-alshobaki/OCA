// 1.
class Car {
    make;
    model;
    constructor(Make, Model) {
        this.make = Make;
        this.model = Model;
    }
    start() {                                   //2
        console.log("The car has started");
    }
}
let myCar = new Car ("Mercedes", "G-class");
console.log(myCar);

// 2.
myCar.start()

//4
class ElectricCar extends Car {
    battery_size;
}

//5
class Account {
    #balance;
    constructor(balance) {
        this.#balance = balance;
    }
    deposit() {
        console.log("You deposit to your balance successfully");
    }
    withdraw() {
        console.log("Your balance has been withdrawn");
    }
    set setBalance (blnc) {

    }
}
let x = new Account()