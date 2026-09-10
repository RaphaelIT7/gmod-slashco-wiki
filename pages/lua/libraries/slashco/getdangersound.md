<function name="GetDangerSound" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the sound path associated with a <page>SlashCo.DangerLevel</page>, played on the round end screen.
	</description>
	<realm>Shared</realm>
	<group>Danger Levels</group>
	<args>
		<arg name="danger" type="number|string">Index or name of the danger level, see <page>SlashCo.DangerLevel</page></arg>
	</args>
	<rets>
		<ret name="sound" type="string">The danger level's sound path, or a fallback sound if `danger` is invalid</ret>
	</rets>
</function>