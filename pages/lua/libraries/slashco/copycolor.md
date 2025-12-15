<function name="CopyColor" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a copy of the given Color allowing you to safely modify it.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="color" type="Color">The color to copy</arg>
	</args>
	<rets>
		<ret name="copy" type="Color">The copy of the color which you can safely modify</ret>
	</rets>
</function>