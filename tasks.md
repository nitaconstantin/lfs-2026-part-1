### **Routing 101**

1. Find the web.php file, where your routes are defined V
2. modify the welcome page and make your own html page which shows only Hello, World! V
3. add a link to an about page V
4. fix the problems V

Homework

1. create a contact us page, create a route and also a view for contact us page V



### **Layout Files**

1. create a nav list  which includes all of the links you need for this project and add the list in the layout file V

2\. instead of a get route to show a simple page, use the Route::view directive V

3\. add a new layout file to your project V

4\. add a different title for each page not a hardcoded title V

5\. create a card component which has two classes: V

* max-w-400{max-width:400px; margin: auto}
* card{background:#e3e3e3; padding:1rem; text-align: center}



### **Pass data to views**

1. pass the first data to your view V
2. read the person name from the query string V
3. override the situation where you don't write a name  for a person, and show a default message V



### **Blade directives**

1. show the values which an array includes, using dd function V
2. verify if you have any tasks, using the blade directive V
3. show each of your tasks which are in your tasks array V
4. show a message when the array is empty @dd($tasks) V



### **Forms**

1. rename the welcome view to ideas V
2. be careful with your route after that V
3. install tailwind using a cdn and use their snippet for a textarea V
4. add a new background to your project(bg-gray-700) V
5. add also some styles to your body(p-6, max-w-xl, mx-auto) V
6. override the default get request for a form, using a post request V
7. change also the url for your form V
8. resolve the error V
9. create a new route for submitting the form V
10. show the data you've passed to the form V
11. put that idea into the session and then redirect to / V
12. change the ideas variables with your newly session value V
13. pass those ideas to your view V
14. Create a route which delete your ideas from session V
15. render the ideas array and title only if there are some ideas into your array V



### **Databases, Migrations and Eloquent**

1. create your first migration (create\_ideas\_table) V
2. in your new created migration add a text description V
3. run your new migration V
4. now get your ideas from your newly created database using DB facades V
5. change your view to show the correctly values of each idea V
6. add a state column to your newly created table V
7. after adding your new column run the php artisan migrate:refresh command V
8. create a new migration 'add\_state\_to\_ideas\_table' V
9. after you've created your new migration be careful to drop that column in your file V
10. run the php artisan migrate:fresh V
11. create a model(Idea) V
12. in your route change the $ideas variable, to point to your Model V
13. add protected guarded to your newly model V
14. show only the pending ideas V
15. create a complex eloquent query using Idea::query()->where()







