<!DOCTYPE html>
<html>
<!-- <head>
    <link rel="stylesheet" type = "text/css" href = "style.css" >
</head>
 -->
<!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

<body>
	<text></text>

		@for ($i = 1; $i < 4; $i++)
			<div class="flex-center links">
				<a href='{{ route('table', ['client' => $i]) }}'>
				Client{{$i}} 
				</a>
			</div>
		@endfor
		

</body>