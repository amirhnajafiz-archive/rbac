# Role Base Access Controller (RBAC)

Role-based access control (RBAC) is a method of restricting network
access based on the roles of individual users within an enterprise.
Now in this repository we use this concept in order to create an ```rbac```
mechanism in ```Laravel```.

## Implementations

All we need to do is to set roles as ```enum```s for our users. For example
we can have ```admin```, ```user```.

Then we set a ```middleware``` in order to check the role of the user from user
stored data.
