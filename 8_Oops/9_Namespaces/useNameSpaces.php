<?php
namespace ProjectA {
    class User {
        public function greet() {
            echo "Hello from ProjectA\User";
        }
    }
}

namespace Main {
    // Alias create karna
    use ProjectA\User as ProjectAUser;

    $user = new ProjectAUser();
    $user->greet();
}
?>
