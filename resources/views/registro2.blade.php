<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
		background-color: #cfcbbf;
		background-image: url(/images/bg4_2.png);
}

#SignupContent {
		max-width: 600px;
		backgroud-color: white;
		border-radius: 4px;
}

@media screen and (max-width: 600px) {
		#SignupContent {
				height: 100%;
		}
	#materialToolbar {
		    padding: 10px;
	}
}
    </style>
</head>
<body>
    <div ng-controller="DemoCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content id="SignupContent" class="md-whiteframe-10dp" flex-sm>
				<md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span flex=""></span> <span class="md-headline" align="center">Material Design Sign Up Form</span> <span flex=""></span> </div>
				</md-toolbar>
				<div layout-padding="">
						<div></div>
						<form name="userForm" method="POST" action="" ng-submit="user.submit(userForm.$valid)" enctype="multipart/form-data">
								<input type="hidden" name="action" value="signup" />
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>First name</label>
												<input ng-model="user.first_name" name="first_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your First Name">
												<div ng-if="userForm.first_name.$dirty" ng-messages="userForm.first_name.$error" role="alert">
														<div ng-message="required" class="my-message">First Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct First Name.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Last Name</label>
												<input ng-model="user.last_name" name="last_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Your Last Name">
												<div ng-if="userForm.last_name.$dirty" ng-messages="userForm.last_name.$error" role="alert">
														<div ng-message="required" class="my-message">Last Name is Required.</div>
														<div ng-message="pattern" class="my-message">Enter correct Last Name.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<p style="font-size: 12px; margin-left: 3px; margin-top: 18px;">Gender: </p>
										<input type="hidden" name="gender" value="{{user.gender}}" />
										<md-radio-group style="margin: 12px 0 19px;" ng-model="user.gender" required>
												<md-radio-button value="Male" class="md-primary">Male</md-radio-button>
												<md-radio-button value="Female">Female</md-radio-button>
										</md-radio-group>
										<md-input-container flex-gt-sm="60">
												<label>Age</label>
												<input required type="number" step="any" name="age" ng-model="user.age" min="13" max="100" placeholder="20" />
												<div ng-if="userForm.age.$dirty" ng-messages="userForm.age.$error" role="alert" multiple>
														<div ng-message="required">Age is Required.</div>
														<div ng-message="min">Only Above 13 years Old are allowed.</div>
														<div ng-message="max">Sorry {{userForm.age.$viewValue}} years old are not Allowed.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>Email</label>
												<input required type="email" name="email" ng-model="user.email" ng-pattern="/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="someone@example.com" />
												<div ng-if="userForm.email.$dirty" ng-messages="userForm.email.$error" role="alert">
														<div ng-message="required" class="my-message">Email Address is Required.</div>
														<div ng-message="pattern" class="my-message">Enter Correct Email Address. </div>
														<div ng-message="email" class="my-message">Enter Correct Email Address. </div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>New Password</label>
												<input name="password" ng-model="user.password" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required placeholder="********">
												<div ng-if="userForm.password.$dirty" ng-messages="userForm.password.$error" role="alert" multiple>
														<div ng-message="required">Password is Required.</div>
														<div ng-message="pattern">Password should contain at least one number, one lowercase and one uppercase character.</div>
														<div ng-message="minlength">Password should be greater than 8 letters.</div>
														<div ng-message="maxlength">Password Can't be more than 100 letters.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Confirm Password</label>
												<input name="confmPassword" ng-model="user.confmPassword" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required compare-to="user.password" placeholder="********">
												<div ng-if="userForm.confmPassword.$dirty" ng-messages="userForm.confmPassword.$error" role="alert">
														<div ng-message="required">Confirm Password is Required.</div>
														<div ng-message="compareTo">Password Doesn't Match.</div>
												</div>
										</md-input-container>
								</div>
								<md-button class="md-raised md-primary" style="width:100%; margin: 0px 0px;" type="submit" ng-disabled="userForm.$invalid" name="submit">Submit</md-button>
								<md-button class="md-raised md-primary" ng-href="https://codepen.io/faizanrupani/pen/QjzMJp" target="_blank" style="width:100%; margin: 15px 0px 0px 0px;">Code Pen Login Form</md-button>
						</form>
				</div>
		</md-content>
</div>
</body>
</html>

<script>
    var app = angular.module("MyApp");
app.controller("DemoCtrl", function ($scope) {
	$scope.user = {
		first_name: "",
		last_name: "",
		gender: "",
		age: "",
		email: ""
	};
});
app.directive("compareTo", function () {
	return {
		require: "ngModel",
		scope: {
			otherModelValue: "=compareTo"
		},
		link: function (scope, element, attributes, ngModel) {
			ngModel.$validators.compareTo = function (modelValue) {
				return modelValue == scope.otherModelValue;
			};

			scope.$watch("otherModelValue", function () {
				ngModel.$validate();
			});
		}
	};
});
</script>