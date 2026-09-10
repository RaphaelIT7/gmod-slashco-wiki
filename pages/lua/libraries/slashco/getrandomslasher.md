<function name="GetRandomSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a random registered slasher name, optionally restricted by danger level and/or slasher class.<br>
		Slashers that aren't selectable, and `Leuonard`, are never picked.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="dangerlevel" type="number" optional>A value from `SlashCo.DangerLevel` to restrict the pick to. Defaults to `SlashCo.DangerLevel.Unknown` (no restriction)</arg>
		<arg name="slasherClass" type="number" optional>A value from `SlashCo.SlasherClass` to restrict the pick to. Defaults to `SlashCo.SlasherClass.Unknown` (no restriction)</arg>
	</args>
	<rets>
		<ret name="name" type="string">The name of a randomly picked matching slasher, see <page>GetSlasherTable</page></ret>
	</rets>
</function>
