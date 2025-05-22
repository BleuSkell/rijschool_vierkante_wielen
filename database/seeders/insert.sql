-- Insert script for the whole database
-- This script is used to insert data into the database
-- Used instead of seeders due to earlier issues with seeders in other projects

-- Table: users
-- this is made with the seeder due to the fact that the password is hashed and cannot be done in the insert script

-- Table: roles
INSERT INTO roles (userId, name, isActive, note, dateCreated, dateModified)
VALUES
(1, 'Admin', true, 'Administrator role', NOW(), NOW()),
(2, 'Instructor', true, 'Instructor role', NOW(), NOW()),
(3, 'Student', true, 'Student role', NOW(), NOW()),
(4, 'Admin', true, 'Administrator role', NOW(), NOW()),
(5, 'Instructor', true, 'Instructor role', NOW(), NOW()),
(6, 'Student', true, 'Student role', NOW(), NOW()),
(7, 'Admin', true, 'Administrator role', NOW(), NOW()),
(8, 'Instructor', true, 'Instructor role', NOW(), NOW()),
(9, 'Student', true, 'Student role', NOW(), NOW()),
(10, 'Admin', true, 'Administrator role', NOW(), NOW());

-- Table: notifications
INSERT INTO notifications (userId, targetGroup, message, notificationType, date, is_active, note, dateCreated, dateModified)
VALUES
(1, 'Students', 'Welcome to the platform!', 'Info', NOW(), true, NULL, NOW(), NOW()),
(2, 'Instructors', 'Meeting scheduled', 'Alert', NOW(), true, NULL, NOW(), NOW()),
(3, 'Students', 'Exam results available', 'Info', NOW(), true, NULL, NOW(), NOW()),
(4, 'Students', 'New lesson available', 'Info', NOW(), true, NULL, NOW(), NOW()),
(5, 'Instructors', 'System maintenance', 'Alert', NOW(), true, NULL, NOW(), NOW()),
(6, 'Students', 'Payment reminder', 'Info', NOW(), true, NULL, NOW(), NOW()),
(7, 'Students', 'Lesson canceled', 'Alert', NOW(), true, NULL, NOW(), NOW()),
(8, 'Instructors', 'New student assigned', 'Info', NOW(), true, NULL, NOW(), NOW()),
(9, 'Students', 'Exam scheduled', 'Info', NOW(), true, NULL, NOW(), NOW()),
(10, 'Students', 'Holiday notice', 'Info', NOW(), true, NULL, NOW(), NOW());

-- Table: packages
INSERT INTO packages (type, numberOfLessons, pricePerLesson, isActive, note, dateCreated, dateModified)
VALUES
('Standard', 10, 50.00, true, 'Standard package', NOW(), NOW()),
('Premium', 20, 45.00, true, 'Premium package', NOW(), NOW()),
('Basic', 5, 60.00, true, 'Basic package', NOW(), NOW()),
('Standard', 10, 50.00, true, 'Standard package', NOW(), NOW()),
('Premium', 20, 45.00, true, 'Premium package', NOW(), NOW()),
('Basic', 5, 60.00, true, 'Basic package', NOW(), NOW()),
('Standard', 10, 50.00, true, 'Standard package', NOW(), NOW()),
('Premium', 20, 45.00, true, 'Premium package', NOW(), NOW()),
('Basic', 5, 60.00, true, 'Basic package', NOW(), NOW()),
('Standard', 10, 50.00, true, 'Standard package', NOW(), NOW());

-- Table: cars
INSERT INTO cars (brand, model, licensePlate, fuelType, isActive, note, dateCreated, dateModified)
VALUES
('Toyota', 'Corolla', '30-JL-JR', 'Petrol', true, 'Company car', NOW(), NOW()),
('Honda', 'Civic', '59-HJ-LR', 'Diesel', true, 'Company car', NOW(), NOW()),
('Ford', 'Focus', '63-TH-BR', 'Electric', true, 'Company car', NOW(), NOW()),
('BMW', '3 Series', '58-NF-KS', 'Hybrid', true, 'Company car', NOW(), NOW()),
('Audi', 'A4', 'TN-FR-90', 'Petrol', true, 'Company car', NOW(), NOW()),
('Mercedes', 'C-Class', 'PR-DR-80', 'Diesel', true, 'Company car', NOW(), NOW()),
('Volkswagen', 'Golf', '43-TJ-LK', 'Electric', true, 'Company car', NOW(), NOW()),
('Tesla', 'Model 3', '56-TM-EO', 'Electric', true, 'Company car', NOW(), NOW()),
('Hyundai', 'Elantra', '24-HE-KH', 'Petrol', true, 'Company car', NOW(), NOW()),
('Kia', 'Optima', '36-KO-OA', 'Diesel', true, 'Company car', NOW(), NOW());

-- Table: instructors
INSERT INTO instructors (userId, number, isActive, note, dateCreated, dateModified)
VALUES
(1, 'INST-001', true, 'Senior instructor', NOW(), NOW()),
(2, 'INST-002', true, 'Junior instructor', NOW(), NOW()),
(3, 'INST-003', true, 'Part-time instructor', NOW(), NOW()),
(4, 'INST-004', true, 'Experienced instructor', NOW(), NOW()),
(5, 'INST-005', true, 'New instructor', NOW(), NOW()),
(6, 'INST-006', true, 'Temporary instructor', NOW(), NOW()),
(7, 'INST-007', true, 'Specialist instructor', NOW(), NOW()),
(8, 'INST-008', true, 'Weekend instructor', NOW(), NOW()),
(9, 'INST-009', true, 'Evening instructor', NOW(), NOW()),
(10, 'INST-010', true, 'Freelance instructor', NOW(), NOW());

-- Table: students
INSERT INTO students (userId, relationNumber, isActive, note, dateCreated, dateModified)
VALUES
(1, 'STU-001', true, 'Enrolled in standard package', NOW(), NOW()),
(2, 'STU-002', true, 'Enrolled in premium package', NOW(), NOW()),
(3, 'STU-003', true, 'Enrolled in basic package', NOW(), NOW()),
(4, 'STU-004', true, 'Enrolled in advanced package', NOW(), NOW()),
(5, 'STU-005', true, 'Enrolled in refresher package', NOW(), NOW()),
(6, 'STU-006', true, 'Enrolled in weekend package', NOW(), NOW()),
(7, 'STU-007', true, 'Enrolled in evening package', NOW(), NOW()),
(8, 'STU-008', true, 'Enrolled in intensive package', NOW(), NOW()),
(9, 'STU-009', true, 'Enrolled in beginner package', NOW(), NOW()),
(10, 'STU-010', true, 'Enrolled in expert package', NOW(), NOW());

-- Table: contacts
INSERT INTO contacts (userId, streetName, houseNumber, addition, postalCode, city, mobile, email, isActive, note, dateCreated, dateModified)
VALUES
(1, 'Main Street', 123, NULL, '1234AB', 'Amsterdam', '0612345678', 'contact1@example.com', true, 'Primary contact', NOW(), NOW()),
(2, 'Second Avenue', 45, 'A', '5678CD', 'Rotterdam', '0623456789', 'contact2@example.com', true, 'Secondary contact', NOW(), NOW()),
(3, 'Third Boulevard', 78, NULL, '9101EF', 'Utrecht', '0634567890', 'contact3@example.com', true, 'Emergency contact', NOW(), NOW()),
(4, 'Fourth Lane', 12, NULL, '3456GH', 'Eindhoven', '0645678901', 'contact4@example.com', true, 'Work contact', NOW(), NOW()),
(5, 'Fifth Road', 34, 'B', '7890IJ', 'Groningen', '0656789012', 'contact5@example.com', true, 'Family contact', NOW(), NOW()),
(6, 'Sixth Path', 56, NULL, '2345KL', 'Maastricht', '0667890123', 'contact6@example.com', true, 'Friend contact', NOW(), NOW()),
(7, 'Seventh Drive', 78, NULL, '6789MN', 'Tilburg', '0678901234', 'contact7@example.com', true, 'Colleague contact', NOW(), NOW()),
(8, 'Eighth Alley', 90, 'C', '1234OP', 'Breda', '0689012345', 'contact8@example.com', true, 'Neighbor contact', NOW(), NOW()),
(9, 'Ninth Plaza', 11, NULL, '5678QR', 'Arnhem', '0690123456', 'contact9@example.com', true, 'Other contact', NOW(), NOW()),
(10, 'Tenth Square', 22, NULL, '9101ST', 'Zwolle', '0601234567', 'contact10@example.com', true, 'Miscellaneous contact', NOW(), NOW());

-- Table: enrollments
INSERT INTO enrollments (studentId, packageId, startDate, endDate, isActive, note, dateCreated, dateModified)
VALUES
(1, 1, '2025-01-01', '2025-06-01', true, 'Standard package enrollment', NOW(), NOW()),
(2, 2, '2025-02-01', '2025-07-01', true, 'Premium package enrollment', NOW(), NOW()),
(3, 3, '2025-03-01', '2025-08-01', true, 'Basic package enrollment', NOW(), NOW()),
(4, 4, '2025-04-01', '2025-09-01', true, 'Advanced package enrollment', NOW(), NOW()),
(5, 5, '2025-05-01', '2025-10-01', true, 'Refresher package enrollment', NOW(), NOW()),
(6, 6, '2025-06-01', '2025-11-01', true, 'Weekend package enrollment', NOW(), NOW()),
(7, 7, '2025-07-01', '2025-12-01', true, 'Evening package enrollment', NOW(), NOW()),
(8, 8, '2025-08-01', '2026-01-01', true, 'Intensive package enrollment', NOW(), NOW()),
(9, 9, '2025-09-01', '2026-02-01', true, 'Beginner package enrollment', NOW(), NOW()),
(10, 10, '2025-10-01', '2026-03-01', true, 'Expert package enrollment', NOW(), NOW());

-- Table: driving_lessons
INSERT INTO driving_lessons (enrollmentId, instructorId, carId, startDate, startTime, endDate, endTime, lessonStatus, goal, isActive, note, dateCreated, dateModified)
VALUES
(1, 1, 1, '2025-05-10', '09:00:00', '2025-05-10', '10:00:00', 'Completed', 'Parking', true, 'First lesson', NOW(), NOW()),
(2, 2, 2, '2025-05-11', '10:00:00', '2025-05-11', '11:00:00', 'Scheduled', 'Highway driving', true, 'Second lesson', NOW(), NOW()),
(3, 3, 3, '2025-05-12', '11:00:00', '2025-05-12', '12:00:00', 'Canceled', 'City driving', false, 'Third lesson', NOW(), NOW()),
(4, 4, 4, '2025-05-13', '12:00:00', '2025-05-13', '13:00:00', 'Completed', 'Reversing', true, 'Fourth lesson', NOW(), NOW()),
(5, 5, 5, '2025-05-14', '13:00:00', '2025-05-14', '14:00:00', 'Scheduled', 'Roundabouts', true, 'Fifth lesson', NOW(), NOW()),
(6, 6, 6, '2025-05-15', '14:00:00', '2025-05-15', '15:00:00', 'Completed', 'Emergency stops', true, 'Sixth lesson', NOW(), NOW()),
(7, 7, 7, '2025-05-16', '15:00:00', '2025-05-16', '16:00:00', 'Scheduled', 'Night driving', true, 'Seventh lesson', NOW(), NOW()),
(8, 8, 8, '2025-05-17', '16:00:00', '2025-05-17', '17:00:00', 'Completed', 'Lane changes', true, 'Eighth lesson', NOW(), NOW()),
(9, 9, 9, '2025-05-18', '17:00:00', '2025-05-18', '18:00:00', 'Scheduled', 'Traffic rules', true, 'Ninth lesson', NOW(), NOW()),
(10, 10, 10, '2025-05-19', '18:00:00', '2025-05-19', '19:00:00', 'Completed', 'Final practice', true, 'Tenth lesson', NOW(), NOW());

-- Table: pickup_addresses
INSERT INTO pickup_addresses (streetName, houseNumber, addition, postalCode, place, isActive, note, dateCreated, dateModified)
VALUES
('Main Street', 123, NULL, '1234AB', 'Amsterdam', true, 'Pickup point 1', NOW(), NOW()),
('Second Avenue', 45, 'A', '5678CD', 'Rotterdam', true, 'Pickup point 2', NOW(), NOW()),
('Third Boulevard', 78, NULL, '9101EF', 'Utrecht', true, 'Pickup point 3', NOW(), NOW()),
('Fourth Lane', 12, NULL, '3456GH', 'Eindhoven', true, 'Pickup point 4', NOW(), NOW()),
('Fifth Road', 34, 'B', '7890IJ', 'Groningen', true, 'Pickup point 5', NOW(), NOW()),
('Sixth Path', 56, NULL, '2345KL', 'Maastricht', true, 'Pickup point 6', NOW(), NOW()),
('Seventh Drive', 78, NULL, '6789MN', 'Tilburg', true, 'Pickup point 7', NOW(), NOW()),
('Eighth Alley', 90, 'C', '1234OP', 'Breda', true, 'Pickup point 8', NOW(), NOW()),
('Ninth Plaza', 11, NULL, '5678QR', 'Arnhem', true, 'Pickup point 9', NOW(), NOW()),
('Tenth Square', 22, NULL, '9101ST', 'Zwolle', true, 'Pickup point 10', NOW(), NOW());

-- Table: driving_lesson_pickup_addresses
INSERT INTO driving_lesson_pickup_addresses (drivingLessonId, pickupAddressId, isActive, note, dateCreated, dateModified)
VALUES
(1, 1, true, 'Pickup for lesson 1', NOW(), NOW()),
(2, 2, true, 'Pickup for lesson 2', NOW(), NOW()),
(3, 3, true, 'Pickup for lesson 3', NOW(), NOW()),
(4, 4, true, 'Pickup for lesson 4', NOW(), NOW()),
(5, 5, true, 'Pickup for lesson 5', NOW(), NOW()),
(6, 6, true, 'Pickup for lesson 6', NOW(), NOW()),
(7, 7, true, 'Pickup for lesson 7', NOW(), NOW()),
(8, 8, true, 'Pickup for lesson 8', NOW(), NOW()),
(9, 9, true, 'Pickup for lesson 9', NOW(), NOW()),
(10, 10, true, 'Pickup for lesson 10', NOW(), NOW());

-- Table: exams
INSERT INTO exams (enrollmentId, instructorId, startDate, startTime, endDate, endTime, location, result, isActive, note, dateCreated, dateModified)
VALUES
(1, 1, '2025-05-15', '09:00:00', '2025-05-15', '10:00:00', 'Amsterdam', 'Passed', true, 'First exam', NOW(), NOW()),
(2, 2, '2025-05-16', '10:00:00', '2025-05-16', '11:00:00', 'Rotterdam', 'Failed', true, 'Second exam', NOW(), NOW()),
(3, 3, '2025-05-17', '11:00:00', '2025-05-17', '12:00:00', 'Utrecht', 'Passed', true, 'Third exam', NOW(), NOW()),
(4, 4, '2025-05-18', '12:00:00', '2025-05-18', '13:00:00', 'Eindhoven', 'Failed', true, 'Fourth exam', NOW(), NOW()),
(5, 5, '2025-05-19', '13:00:00', '2025-05-19', '14:00:00', 'Groningen', 'Passed', true, 'Fifth exam', NOW(), NOW()),
(6, 6, '2025-05-20', '14:00:00', '2025-05-20', '15:00:00', 'Maastricht', 'Failed', true, 'Sixth exam', NOW(), NOW()),
(7, 7, '2025-05-21', '15:00:00', '2025-05-21', '16:00:00', 'Tilburg', 'Passed', true, 'Seventh exam', NOW(), NOW()),
(8, 8, '2025-05-22', '16:00:00', '2025-05-22', '17:00:00', 'Breda', 'Failed', true, 'Eighth exam', NOW(), NOW()),
(9, 9, '2025-05-23', '17:00:00', '2025-05-23', '18:00:00', 'Arnhem', 'Passed', true, 'Ninth exam', NOW(), NOW()),
(10, 10, '2025-05-24', '18:00:00', '2025-05-24', '19:00:00', 'Zwolle', 'Failed', true, 'Tenth exam', NOW(), NOW());

-- Table: invoices
INSERT INTO invoices (enrollmentId, invoiceNumber, invoiceDate, amountExcBtw, btw, amountIncBtw, invoiceStatus, isActive, note, dateCreated, dateModified)
VALUES
(1, 'INV-001', '2025-05-01', 500.00, 21, 605.00, 'Paid', true, 'Invoice for enrollment 1', NOW(), NOW()),
(2, 'INV-002', '2025-05-02', 900.00, 21, 1089.00, 'Unpaid', true, 'Invoice for enrollment 2', NOW(), NOW()),
(3, 'INV-003', '2025-05-03', 300.00, 21, 363.00, 'Paid', true, 'Invoice for enrollment 3', NOW(), NOW()),
(4, 'INV-004', '2025-05-04', 700.00, 21, 847.00, 'Unpaid', true, 'Invoice for enrollment 4', NOW(), NOW()),
(5, 'INV-005', '2025-05-05', 400.00, 21, 484.00, 'Paid', true, 'Invoice for enrollment 5', NOW(), NOW()),
(6, 'INV-006', '2025-05-06', 600.00, 21, 726.00, 'Unpaid', true, 'Invoice for enrollment 6', NOW(), NOW()),
(7, 'INV-007', '2025-05-07', 800.00, 21, 968.00, 'Paid', true, 'Invoice for enrollment 7', NOW(), NOW()),
(8, 'INV-008', '2025-05-08', 1000.00, 21, 1210.00, 'Unpaid', true, 'Invoice for enrollment 8', NOW(), NOW()),
(9, 'INV-009', '2025-05-09', 200.00, 21, 242.00, 'Paid', true, 'Invoice for enrollment 9', NOW(), NOW()),
(10, 'INV-010', '2025-05-10', 1500.00, 21, 1815.00, 'Unpaid', true, 'Invoice for enrollment 10', NOW(), NOW());

-- Table: payments
INSERT INTO payments (invoiceId, date, status, isActive, note, dateCreated, dateModified)
VALUES
(1, '2025-05-01', 'Paid', true, 'Payment for invoice 1', NOW(), NOW()),
(2, '2025-05-02', 'Pending', true, 'Payment for invoice 2', NOW(), NOW()),
(3, '2025-05-03', 'Failed', true, 'Payment for invoice 3', NOW(), NOW()),
(4, '2025-05-04', 'Paid', true, 'Payment for invoice 4', NOW(), NOW()),
(5, '2025-05-05', 'Pending', true, 'Payment for invoice 5', NOW(), NOW()),
(6, '2025-05-06', 'Failed', true, 'Payment for invoice 6', NOW(), NOW()),
(7, '2025-05-07', 'Paid', true, 'Payment for invoice 7', NOW(), NOW()),
(8, '2025-05-08', 'Pending', true, 'Payment for invoice 8', NOW(), NOW()),
(9, '2025-05-09', 'Failed', true, 'Payment for invoice 9', NOW(), NOW()),
(10, '2025-05-10', 'Paid', true, 'Payment for invoice 10', NOW(), NOW());