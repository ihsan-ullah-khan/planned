<!DOCTYPE html>
<html lang="en">

<!-- head -->
<x-head/>
<!-- end of head -->

<!-- Body -->
<body data-spy="scroll" data-target=".fixed-top">
<!-- Navigation -->
<x-topbar/>
<!-- end of navigation -->

<!-- main -->
<main>
@yield('content')
</main>
<!-- end of main -->

<!-- Copyright -->
<x-copyright/>
<!-- end of copyright -->

<!-- scripts -->
<x-scripts/>
<!-- end of scripts -->

</body>
<!-- end of body -->
</html>
