@api @groups @stability
Feature: Filter Groups
  Benefit: In order to filter groups
  Role: As a LU
  Goal/desire: I want to filter groups

  Scenario: Successfully filter groups
    Given users:
      | name       | mail                   | status |
      | Group User | group_user@example.com | 1      |

    Given groups:
      | title              | description      | author     | type          | language |
      | Behat Open Group   | My description   | Group User | open_group    | en       |
      | Behat Closed Group | My description 2 | Group User | closed_group  | en       |

    Given I am logged in as an "authenticated user"
    When I am on "/all-groups"
    Then I should see "FILTER" in the "Sidebar second"
    And I should see "Group type" in the "Sidebar second"
