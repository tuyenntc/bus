class Bus {
    constructor(direction, stations, seats, passengers, last_station) {
        this.direction = direction;
        this.stations = ['Praha', 'Jihlava', 'Brno', 'Břeclav', 'Vídeň'];
        this.seats = seats;
        this.passengers = passengers ;
        this.last_station = 0;
    }
    current () {
        return this.last_station[this.last_station];
    }
    next () {
        this.last_station += direction;
        if (this.last_station === this.stations.length) {
            this.last_station = this.stations.length - 1;

        }
    }
    board (count) {
        this.passengers =+ count;
        if (this.passenger > this.seats) {
            this.passengers = this.seats
        }
    }
    deboard (count) {
        
    }
}



// In the class Bus create these methods:

// current() returns the name of the station the bus last stopped in
// next() sets the last_station index to the next station,
// board(count) board count new passengers to the bus. If the number of passengers would be greater the number of seats after calling this method, just board only as many to fit in the bus.
// deboard(count) deboard count passengers from the bus. If the count is greater then the number of passengers on the bus just deboard those that are inside.