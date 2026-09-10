<function name="GetDangerColor" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the color associated with a <page>SlashCo.DangerLevel</page>, used to display it in UI.
	</description>
	<realm>Shared</realm>
	<group>Danger Levels</group>
	<args>
		<arg name="danger" type="number|string">Index or name of the danger level, see <page>SlashCo.DangerLevel</page></arg>
	</args>
	<rets>
		<ret name="color" type="Color">The danger level's color, or a fallback color if `danger` is invalid</ret>
	</rets>
</function>