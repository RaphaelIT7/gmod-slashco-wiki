<function name="SlashCo:AudioSystem:PlaySound:<group>" parent="" type="hook">
	<description>
		Called right after <page>SlashCo.AudioSystem.PlaySound</page> created a channel for a sound whose `soundData.group` field is set.<br>
		`<group>` is replaced with the actual group value, e.g. `SlashCo:AudioSystem:PlaySound:Generator` or `SlashCo:AudioSystem:PlaySound:Helicopter`.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="soundData" type="SoundData">The sound data table that was passed to <page>SlashCo.AudioSystem.PlaySound</page>.</arg>
		<arg name="channel" type="IGModAudioChannel">The created sound channel.</arg>
	</args>
</function>
