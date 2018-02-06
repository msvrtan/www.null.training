@workshop_session
Feature:
  In order to organize workshops
  As an event manager
  I want to create workshop session

  Scenario: Creating Workshop session
    Given there is a "Do something" workshop
    And there is a "Classroom" venue
    When I create public session for tomorrow
    Then workshop has a session defined
