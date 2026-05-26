<function name="FadeSound" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Fades the given sound to the given volume over the specified time
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="identifier" type="string">The sound identifier</arg>
		<arg name="fadeTime" type="number" default="0">How many seconds it takes for it to fade to the target volume</arg>
		<arg name="targetVolume" type="number">The target volume to fade to</arg>
	</args>
</function>