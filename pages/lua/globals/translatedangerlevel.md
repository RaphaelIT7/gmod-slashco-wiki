<function name="TranslateDangerLevel" parent="" type="libraryfunc">
	<description>
		Returns the name of a danger level from its ID, as registered via `SlashCo.AddDangerLevel`.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="id" type="number">A value from `SlashCo.DangerLevel`</arg>
	</args>
	<rets>
		<ret name="name" type="string">The name of the danger level, or `nil` if the ID doesn't exist</ret>
	</rets>
</function>
