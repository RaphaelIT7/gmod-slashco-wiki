<function name="PrecacheModel" parent="SlashCo" type="libraryfunc">
	<description>
		Precaches a model via [util.PrecacheModel](https://wiki.facepunch.com/gmod/util.PrecacheModel) and remembers it in an internal table so it isn't precached again, e.g. after an autorefresh.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="modelName" type="string">The model path to precache.</arg>
	</args>
</function>