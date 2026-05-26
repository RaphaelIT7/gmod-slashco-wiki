<function name="GetBackgroundMusic" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the current soundFile of the background music.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="fallback" type="string" default="">The fallback soundFile to return if there currently is none</arg>
	</args>
	<rets>
		<ret name="soundFile" type="string"></ret>
	</rets>
</function>