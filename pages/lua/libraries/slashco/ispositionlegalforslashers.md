<function name="IsPositionLegalForSlashers" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether a position is far enough away from all survivors to be considered a legal spot for a slasher to use, for example when picking a teleport or ability position.<br>
		The required distance scales with <page>SlashCo.GetMapSize</page>.
	</description>
	<realm>Shared</realm>
	<group>Spawning</group>
	<args>
		<arg name="pos" type="Vector">The position to check</arg>
		<arg name="noSurvivorCheck" type="boolean" optional>If `true`, skips the distance check against survivors and always returns `true`</arg>
		<arg name="distFactor" type="number" default="1" optional>Multiplier applied to the base distance requirement</arg>
	</args>
	<rets>
		<ret name="legal" type="boolean">Whether the position is legal for slashers to use</ret>
	</rets>
</function>