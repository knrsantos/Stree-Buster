
  function calculateCalories() {
    // Get input values
    var age = document.getElementById("age").value;
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var gender = document.getElementById("gender").value.toLowerCase(); 
    var activity = document.getElementById("activity").value;

    // Constants for calculation (you might need to adjust these based on your requirements)
    var baseMetabolicRate;
    var cuttingMultiplier = 0.8; // Example: 80% of maintenance calories for cutting
    var bulkingMultiplier = 1.2; // Example: 120% of maintenance calories for bulking

    // Basic validation
    if (!age || !weight || !height || !gender || !activity) {
      alert("Please fill in all the fields.");
      return;
    }

    // Calorie calculation based on some assumptions (you may replace this with your own formula)
    if (gender === "female") {
      baseMetabolicRate = 655 + 9.6 * weight + 1.8 * height - 4.7 * age;
    } else if (gender === "male") {
      baseMetabolicRate = 66 + 13.7 * weight + 5 * height - 6.8 * age;
    } else {
      alert("Invalid gender. Please enter 'male' or 'female'.");
      return;
    }

    // Calculate maintenance calories
    var maintenanceCalories = baseMetabolicRate * activity;

    // Display results
    document.getElementById("caloriesResult").innerHTML = "Maintenance Calories: " + maintenanceCalories.toFixed(2);
    document.getElementById("cuttingResult").innerHTML = "Cutting Calories: " + (maintenanceCalories * cuttingMultiplier).toFixed(2);
    document.getElementById("bulkingResult").innerHTML = "Bulking Calories: " + (maintenanceCalories * bulkingMultiplier).toFixed(2);
  }

