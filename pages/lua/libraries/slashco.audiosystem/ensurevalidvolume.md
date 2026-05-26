<function name="EnsureValidVolume" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Checks if the input value is a <link url="https://wiki.facepunch.com/gmod/nan">NaN value</link> and if so it will return `0`
		<internal>This function acts more as an internal safeguard in case our math somehow explodes.</internal>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="volume" type="number">Volume to check</arg>
	</args>
	<rets>
		<ret name="volume" type="number">Volume that is never NaN</ret>
	</rets>
</function>