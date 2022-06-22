\c airport;

-- 1. Simple Queries

-- Passenger information FROM the ticket
SELECT fname, lname, address FROM passenger, ticket WHERE ticket.p_no = passenger.passport_number;

-- Work location of employee
SELECT e.name, c.city_name FROM employee as e, airport as a, city as c WHERE e.airport_id = a.a_id and a.c_id = c.city_id;

-- All the flights owned by an airline
SELECT a.name, f.code FROM airline as a, flight as f WHERE a.id = f.airline_id;

-- All flights that have no passengers
SELECT code FROM flight EXCEPT SELECT flight_code FROM ticket;

-- Display booked tickets orderd by the date of journey
SELECT * FROM ticket order by date_of_travel;

-- 2. Complex queries

-- Flight details of a passenger
SELECT f.code, f.terminal_number, f.flight_status, f.schedule FROM flight as f, passenger as p, ticket as t 
WHERE t.p_no = p.passport_number and t.flight_code = f.code;


-- Get the route of a flight FROM the ticket
SELECT t.ticket_no, f.code, r.source, r.dest, s.stop_name FROM flight as f, ticket as t, routes as r, stops as s
WHERE t.flight_code = f.code and r.f_code = f.code and s.r_id = r.route_id order by t.ticket_no;

-- 3.3 Nested form

-- Display flight details on the board (Done)
SELECT a.a_name, b.b_id, f.code, f.terminal_number, f.flight_status, f.schedule FROM airport as a, board as b, flight as f
WHERE a.a_id = b.airport_id and f.aid = a.a_id;

-- Number of passengers in each flight
SELECT flight_code, count(ticket_no) FROM ticket group by flight_code;

-- Flights starting FROM Bengaluru
SELECT r.dest, s.stop_name FROM routes as r, stops as s WHERE r.source = 'Bengaluru' and r.route_id = s.r_id;


-- 3.1 Nested form - Work location of an employee
SELECT e.name, c.city_name FROM employee as e, city as c WHERE e.airport_id in 
(SELECT a_id FROM airport) and c.city_id in (SELECT c_id FROM airport);


-- 3.2 Nested form - Flight details of passenger
SELECT code, terminal_number,   flight_status, schedule FROM flight WHERE code in 
(SELECT flight_code FROM ticket WHERE p_no in (SELECT passport_number FROM passenger));